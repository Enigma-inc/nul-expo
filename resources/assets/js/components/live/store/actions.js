export default{
    getNulisticeEvents({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('../../api/events/nulistice/1').then(response => {
                //Update Nulistice events data store
                commit('SET_NULISTICE_EVENTS',response.data)
                resolve(response.data);
            })
                .catch(error => {
                    reject(error);
                });
        });

    },
    getRerisEvents({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('../../api/events/reris/1').then(response => {
                //Update Nulistice events data store
                commit('SET_RERIS_EVENTS',response.data)
                resolve(response.data);
            })
                .catch(error => {
                    reject(error);
                });
        });

    },
    getGeneralEvents({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('../../api/events/general/1').then(response => {
                //Update General events data store
                commit('SET_GENERAL_EVENTS',response.data)
                resolve(response.data);
            })
                .catch(error => {
                    reject(error);
                });
        });

    },
    downloadProgram({commit}) {
        window.location = "http://www.nulistice.org.ls/download?file-name=programme";
    },
    goToWebsite({commit}) {
        window.location = "http://www.nulistice.org.ls/home";
    }
}
