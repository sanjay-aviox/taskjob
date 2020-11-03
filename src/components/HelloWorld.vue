<template>
  <div class="hello">
    <div class="form">
      <form>
        <input type="text" v-model="title" placeholder="Type to search" />
      </form>
      <button @click="onSubmit" class="btn ">Search</button>
    </div>
  </div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  data() {
    return {
      title: "",
    };
  },
  methods: {
    ...mapActions(["getResults"]),
    onSubmit(e) {
      e.preventDefault();
      this.getResults(this.title);
    },
  },

  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
.form {
  display: flex;
  align-items: center;
  justify-content: center;
}

input {
  margin-left: 20px;
  height: 30px;
  padding: 0.2rem 0.6rem;
  display: block;
}
input {
  width: 200px;
  height: 20px;
}
button {
  margin-left: 20px;
}
.hello {
  max-width: 90%;
  margin: 2rem auto;
}
</style>
