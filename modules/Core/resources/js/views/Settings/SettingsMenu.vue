<template>
  <IVerticalNavigation class="mb-4 sm:sticky sm:top-10 lg:mb-0">
    <IVerticalNavigationItem
      icon="Cog"
      href="/settings/general"
      :active="$route.path === '/settings'"
      :to="{ name: 'settings-general' }"
    >
      <Icon icon="Cog" />
      {{ $t('core::settings.general') }}
    </IVerticalNavigationItem>

    <IVerticalNavigationCollapsible v-for="item in items" :key="item.id">
      <IVerticalNavigationItem
        :to="!item.children.length ? item.path : undefined"
        :href="
          !item.children.length
            ? item.path
              ? $router.resolve(item.path).href
              : undefined
            : undefined
        "
      >
        <Icon :icon="item.icon" />
        {{ item.title }}
      </IVerticalNavigationItem>

      <!-- Child -->
      <IVerticalNavigationItem
        v-for="child in item.children"
        :key="item.id + '-' + child.id"
        :to="child.path"
        :href="child.path ? $router.resolve(child.path).href : undefined"
      >
        <Icon :icon="child.icon" />
        {{ child.title }}
      </IVerticalNavigationItem>
    </IVerticalNavigationCollapsible>
  </IVerticalNavigation>
</template>

<script setup>
import { useApp } from '@/Core/composables/useApp'

const { scriptConfig } = useApp()

const items = scriptConfig('menu.settings')
</script>
