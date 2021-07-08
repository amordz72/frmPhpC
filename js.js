const App = {
  props: ["title", "likes", "isPublished", "commentIds", "author"],
  data() {
    return {
      ti: "Form Creature",
      bs: ``,
    };
  },methods: {
    
  },created() {
   // alert("")
  },
};
Vue.createApp(App).mount("#app");
