<template>
  <Panel
    :panel="panel"
    :disable-resize="!fieldsCollapsed"
    :overlay="!componentReady"
  >
    <div class="mb-6 flex items-center justify-between">
      <ITextDisplay
        v-show="componentReady"
        :text="$t('core::app.record_view.sections.details')"
      />

      <div v-show="componentReady" class="-my-1.5 flex items-center space-x-1">
        <IButton
          v-if="resource.authorizations.update"
          v-i-tooltip="$t('core::app.edit')"
          icon="PencilSquareSolid"
          basic
          small
          @click="floatResourceInEditMode({ resourceName, resourceId })"
        />

        <IButton
          v-if="$gate.isSuperAdmin()"
          v-i-tooltip="$t('core::fields.manage')"
          icon="AdjustmentsVerticalSolid"
          :to="{
            name: 'resource-fields',
            params: { resourceName },
            query: { view: $scriptConfig('fields.views.detail') },
          }"
          basic
          small
        />

        <FieldsButtonCollapse
          v-if="totalCollapsable > 0"
          v-model:collapsed="fieldsCollapsed"
          :total="totalCollapsable"
        />
      </div>
    </div>

    <DetailFields
      v-if="componentReady"
      v-bind="$attrs"
      :collapsed="fieldsCollapsed"
      :fields="fields"
      :resource-name="resourceName"
      :resource-id="resourceId"
      :resource="resource"
    />
  </Panel>
</template>

<script setup>
import { ref, toRef } from 'vue'

import { useFloatingResourceModal } from '@/Core/composables/useFloatingResourceModal'
import { useResourceFields } from '@/Core/composables/useResourceFields'

defineOptions({ inheritAttrs: false })

const props = defineProps({
  resourceName: { required: true, type: String },
  resourceId: { required: true, type: [String, Number] },
  resource: { required: true, type: Object },
  panel: { required: true, type: Object },
})

const fieldsCollapsed = ref(true)

const {
  fields,
  hasFields: componentReady,
  setResource,
  totalCollapsable,
  getDetailFields,
} = useResourceFields()

const { floatResourceInEditMode } = useFloatingResourceModal()

getDetailFields(props.resourceName, props.resource.id).then(detailFields => {
  fields.value = detailFields
  setResource(toRef(props, 'resource'))
})
</script>
