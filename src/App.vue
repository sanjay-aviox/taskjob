<template>
  <div id="app">
    <HelloWorld msg="Welcome to Your Vue.js App" />
    <Table />
  </div>
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";
import Table from "./components/Table.vue";
import M from "materialize-css";

export default {
  mounted() {
    M.AutoInit();
  },
  name: "App",
  components: {
    HelloWorld,
    Table,
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
}
</style>
