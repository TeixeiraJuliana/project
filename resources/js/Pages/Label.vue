<template>
  <div class="tag">
      <label for="">{{nameData}}</label>
      <div class="data">
          <slot></slot>
      </div>
  </div>
</template>

<script>
export default {
    props:['nameData']
}
</script>

<style>

</style>
