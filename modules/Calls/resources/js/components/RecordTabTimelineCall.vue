<template>
  <BaseRecordTabTimelineItem
    heading-class="font-medium"
    icon="Phone"
    :resource-name="resourceName"
    :resource-id="resourceId"
    :created-at="log.created_at"
    :is-pinned="log.is_pinned || false"
    :timelineable-id="log.id"
    :timeline-relationship="log.timeline_relation"
    :timeline-subject-key="resource.timeline_subject_key"
    :timelineable-key="log.timeline_key"
    :heading="$t('calls::call.timeline.heading')"
  >
    <div class="mt-3">
      <CallsView
        :call-id="log.id"
        :comments-count="log.comments_count"
        :call-date="log.date"
        :body="log.body"
        :user-id="log.user_id"
        :outcome-id="log.call_outcome_id"
        :authorizations="log.authorizations"
        :associations-count="log.associations_count"
        :related-resource="resource"
        :comments="log.comments || []"
        :via-resource="resourceName"
        :via-resource-id="resourceId"
        collapsable
      />
    </div>
  </BaseRecordTabTimelineItem>
</template>

<script setup>
import BaseRecordTabTimelineItem from '@/Core/views/Timeline/BaseRecordTabTimelineItem.vue'

import CallsView from './CallsView.vue'

defineProps({
  log: { type: Object, required: true },
  resourceName: { type: String, required: true },
  resourceId: { type: [String, Number], required: true },
  resource: { type: Object, required: true },
})
</script>
