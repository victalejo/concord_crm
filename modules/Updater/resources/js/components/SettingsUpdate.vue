<template>
  <ICard class="mb-3">
    <ICardBody>
      <div class="my-1 flex flex-col sm:flex-row sm:items-center">
        <IFormLabel for="purchase-key" class="mb-1 shrink-0 sm:mb-0 sm:mr-4">
          {{ $t('core::app.purchase_key') }}
        </IFormLabel>

        <div class="flex grow space-x-2">
          <IFormInput
            id="purchase-key"
            v-model="updateData.purchase_key"
            :placeholder="$t('core::app.enter_purchase_key')"
            :class="[
              componentReady && !hasValidPurchaseKey
                ? 'text-danger-900 placeholder-danger-400 focus:ring-danger-500 dark:placeholder-danger-300 dark:focus:ring-danger-400'
                : '',
            ]"
          />

          <IButton
            variant="secondary"
            :text="$t('core::app.save')"
            @click="savePurchaseKey"
          />
        </div>
      </div>
    </ICardBody>
  </ICard>

  <IOverlay :show="!passesZipRequirement && componentReady">
    <template v-if="!passesZipRequirement" #overlay>
      {{ $t('updater::update.update_zip_is_required') }}
    </template>

    <ICard class="mb-3">
      <ICardHeader>
        <div class="space-y-1">
          <ICardHeading :text="$t('updater::update.system')" />

          <IText
            v-show="hasPatchesToApply && canPerformUpdate"
            class="flex items-center gap-x-1.5"
          >
            <Icon icon="ExclamationTriangle" class="size-5 text-warning-500" />
            {{ $t('updater::update.apply_patches_before_updating') }}
          </IText>
        </div>
      </ICardHeader>

      <ICardBody>
        <IOverlay :show="!componentReady">
          <div v-if="updateData.is_new_version_available">
            <div
              class="flex flex-col space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0"
            >
              <div
                class="flex-1 rounded bg-warning-100 p-2 px-2 py-3 text-center text-warning-700"
              >
                <h4
                  v-t="'updater::update.installed_version'"
                  class="font-medium"
                />

                <h5 v-text="updateData.installed_version"></h5>
              </div>

              <div
                class="flex-1 rounded bg-success-100 p-2 px-2 py-3 text-center text-success-700"
              >
                <h4
                  v-t="'updater::update.latest_version'"
                  class="font-medium"
                />

                <h5 v-text="updateData.latest_available_version"></h5>
              </div>
            </div>
          </div>

          <div v-else>
            <ITextDisplay v-show="componentReady" class="text-center">
              <Icon
                icon="EmojiHappy"
                class="m-auto mb-2 size-10 text-success-500"
              />
              {{ $t('updater::update.not_available') }}
            </ITextDisplay>

            <IText
              v-show="componentReady"
              class="text-center"
              :text="$t('updater::update.using_latest_version')"
            />
          </div>
        </IOverlay>
      </ICardBody>

      <ICardFooter class="text-right">
        <IButton
          variant="success"
          :text="updateButtonText"
          :disabled="
            !canPerformUpdate ||
            updateInProgress ||
            patchBeingApplied !== false ||
            applyingAllPatchesInProgress ||
            hasPatchesToApply
          "
          @click="update"
        />
      </ICardFooter>
    </ICard>
  </IOverlay>

  <IOverlay :show="!passesZipRequirement && componentReady">
    <template v-if="!passesZipRequirement" #overlay>
      {{ $t('updater::update.patch_zip_is_required') }}
    </template>

    <!-- <IFormCheckboxField class="mb-1 mt-6">
      <IFormCheckbox v-model:checked="form.auto_apply_patches" @change="submit" />

      <IFormCheckboxLabel :text="$t('updater::update.auto_apply_patches')" />
    </IFormCheckboxField> -->

    <ICard>
      <ICardHeader>
        <ICardHeading :text="$t('updater::update.patches')" />

        <ICardActions v-if="hasPatchesToApply">
          <IButton
            :disabled="applyingAllPatchesInProgress"
            :loading="applyingAllPatchesInProgress"
            basic
            small
            @click="applyAllPatches"
          >
            {{ $t('updater::update.apply_all_patches') }}
          </IButton>
        </ICardActions>
      </ICardHeader>

      <IOverlay :show="!componentReady">
        <ul
          v-if="hasPatches"
          class="divide-y divide-neutral-200 dark:divide-neutral-500/30"
        >
          <li
            v-for="(patch, index) in sortedPatches"
            :key="patch.token"
            class="px-4 py-4 sm:px-6"
          >
            <div class="flex items-center justify-between">
              <div>
                <!-- eslint-disable -->
                <ITextDark
                  class="font-medium"
                  v-html="patch.description"
                />
                <!-- eslint-enable -->
                <IBadge
                  v-if="patch.isApplied"
                  class="mr-1"
                  variant="success"
                  :text="$t('updater::update.patch_applied')"
                />

                <IBadge
                  v-if="patch.isCritical"
                  class="mr-1"
                  variant="danger"
                  :text="$t('updater::update.is_critical')"
                />

                <IBadge :text="patch.token" />

                <ITextSmall class="ml-2.5 inline">
                  {{ localizedDateTime(patch.date) }}
                </ITextSmall>

                <br />
              </div>

              <div class="flex items-center">
                <ILink
                  :href="
                    '/patches/' + patch.token + '/' + updateData.purchase_key
                  "
                  :class="[
                    'mr-3',
                    {
                      'pointer-events-none opacity-70':
                        index > 0 ||
                        applyingAllPatchesInProgress ||
                        patchBeingApplied !== false ||
                        !hasValidPurchaseKey ||
                        !passesZipRequirement ||
                        updateInProgress ||
                        patch.isApplied,
                    },
                  ]"
                >
                  <Icon icon="DocumentDownload" class="size-5" />
                </ILink>

                <span
                  v-i-tooltip="
                    index === 0 || patch.isApplied
                      ? null
                      : $t('updater::update.apply_oldest_first')
                  "
                  class="inline-block"
                  tabindex="-1"
                >
                  <IButton
                    :disabled="
                      index > 0 ||
                      applyingAllPatchesInProgress ||
                      patchBeingApplied !== false ||
                      !hasValidPurchaseKey ||
                      !passesZipRequirement ||
                      updateInProgress ||
                      patch.isApplied
                    "
                    small
                    @click="applyPatch(patch.token, index)"
                  >
                    {{
                      patchBeingApplied === index
                        ? $t('updater::update.update_in_progress')
                        : $t('core::app.apply')
                    }}
                  </IButton>
                </span>
              </div>
            </div>
          </li>
        </ul>

        <ICardBody v-else>
          <IText
            v-show="componentReady"
            class="text-center"
            :text="$t('updater::update.no_patches')"
          />
        </ICardBody>
      </IOverlay>
    </ICard>
  </IOverlay>
</template>

<script setup>
import { computed, ref } from 'vue'
import { useI18n } from 'vue-i18n'
import orderBy from 'lodash/orderBy'

import { useApp } from '@/Core/composables/useApp'
import { useDates } from '@/Core/composables/useDates'
import { useSettings } from '@/Core/composables/useSettings'
import { isPurchaseKey } from '@/Core/utils'

const { t } = useI18n()
const { form, submit } = useSettings()
const { localizedDateTime } = useDates()
const { scriptConfig } = useApp()

const passesZipRequirement = scriptConfig('requirements.zip')

const updateData = ref({})
const patches = ref([])
const updateInProgress = ref(false)
const patchBeingApplied = ref(false)
const applyingAllPatchesInProgress = ref(false)
const componentReady = ref(false)

const sortedPatches = computed(() =>
  orderBy(
    patches.value.map(patch => {
      // For date sorting
      patch._date = new Date(patch.date)

      return patch
    }),
    ['isApplied', '_date'],
    ['asc', 'asc']
  )
)

const hasPatches = computed(() => patches.value.length > 0)

const hasPatchesToApply = computed(() => patches.value.some(p => !p.isApplied))

const updateButtonText = computed(() =>
  updateInProgress.value
    ? t('updater::update.update_in_progress')
    : t('updater::update.perform')
)

const hasValidPurchaseKey = computed(() =>
  isPurchaseKey(updateData.value.purchase_key)
)

const canPerformUpdate = computed(
  () =>
    updateData.value.is_new_version_available &&
    hasValidPurchaseKey.value &&
    passesZipRequirement
)

function savePurchaseKey() {
  form.purchase_key = updateData.value.purchase_key
  submit()
}

function handleUpdateErrorResponse(response) {
  if (response.data === 'Incorrect files permissions.') {
    window.location.href = '/update/errors/permissions'
  } else {
    Innoclapps.error(response.data)
  }
}

function update() {
  updateInProgress.value = true

  Innoclapps.request()
    .post(`/update?purchase_key=${updateData.value.purchase_key}`)
    .then(() => window.location.reload())
    .catch(({ response }) => handleUpdateErrorResponse(response))
    .finally(() => (updateInProgress.value = false))
}

function applyPatch(token, index) {
  patchBeingApplied.value = index

  Innoclapps.request()
    .post(`/patches/${token}?purchase_key=${updateData.value.purchase_key}`)
    .then(() => window.location.reload())
    .catch(({ response }) => handleUpdateErrorResponse(response))
    .finally(() => (patchBeingApplied.value = false))
}

function applyAllPatches() {
  applyingAllPatchesInProgress.value = true

  Innoclapps.request()
    .post(`/patches?purchase_key=${updateData.value.purchase_key}`)
    .then(() => window.location.reload())
    .catch(({ response }) => handleUpdateErrorResponse(response))
    .finally(() => (applyingAllPatchesInProgress.value = false))
}

function prepareComponent() {
  Promise.all([Innoclapps.request('/update'), Innoclapps.request('/patches')])
    .then(values => {
      updateData.value = values[0].data
      patches.value = values[1].data
    })
    .catch(({ response }) => handleUpdateErrorResponse(response))
    .finally(() => (componentReady.value = true))
}

prepareComponent()
</script>
