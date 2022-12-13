<template>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
      </li>
      <li class="nav-item">
        <router-link :to="{ name: 'create' }" class="nav-link">Create Post</router-link>
      </li>
      <li class="nav-item">
        <router-link :to="{ name: 'index' }" class="nav-link">Transactions</router-link>
      </li>
    </ul>
  </nav>
</template>
