export default {
    state:  {
        welcomeMassage: 'Welcome to my test Vue app'
    },
    getters: {
        welcome(state){
            return state.welcomeMassage;
        }
    },
    mutations: {},
    action: {}
};
