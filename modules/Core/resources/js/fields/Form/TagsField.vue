<template>
  <BaseFormField
    v-slot="{ readonly, fieldId }"
    :resource-name="resourceName"
    :field="field"
    :value="model"
    :is-floating="isFloating"
  >
    <FormFieldGroup
      :field="field"
      :label="field.label"
      :field-id="fieldId"
      :validation-errors="validationErrors"
    >
      <InputTagsSelect
        v-model="model"
        :disabled="readonly"
        :input-id="fieldId"
        :name="field.attribute"
        :type="field.type"
        v-bind="field.attributes"
      />
    </FormFieldGroup>
  </BaseFormField>
</template>

<script setup>
import InputTagsSelect from '../../components/InputTagsSelect.vue'
import FormFieldGroup from '../FormFieldGroup.vue'

const props = defineProps({
  field: { type: Object, required: true },
  resourceName: String,
  resourceId: [String, Number],
  validationErrors: Object,
  isFloating: Boolean,
})

const emit = defineEmits(['setInitialValue'])

const model = defineModel({ type: Array, default: () => [] })

function parseInitialValue() {
  return (
    props.field.value?.map(tag => (typeof tag === 'string' ? tag : tag.name)) ||
    []
  )
}

function setInitialValue() {
  emit('setInitialValue', parseInitialValue())
}

setInitialValue()
</script>
