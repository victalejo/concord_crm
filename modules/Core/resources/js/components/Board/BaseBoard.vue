<template>
  <div>
    <div class="board-top px-4 py-3 sm:px-6">
      <slot name="top" />
    </div>

    <div
      :id="boardId"
      :class="[
        'board block h-[calc(100vh-(var(--navbar-height)+var(--board-top-height,60px)))] space-x-4 overflow-x-scroll whitespace-nowrap px-4 pb-2 sm:px-6',
        boardClass,
      ]"
    >
      <slot />
    </div>
  </div>
</template>

<script setup>
defineProps({
  boardClass: [String, Array, Object],
  boardId: { required: true, type: String },
})
</script>
