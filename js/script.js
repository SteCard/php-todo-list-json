"use strict";

// RICHIAMO FUNZIONE CREATE_APP
const { createApp } = Vue;

// FUNZIONE CREATE_APP
createApp({

    data() {
        return {
            // VARIABILI VUE
            apiUrl: 'server.php',
            todoList: [],
            todoItem: '',
        }
    },
    created() {
        axios.get(this.apiUrl).then((result) => {
            this.todoList = result.data;
        });
    },
}).mount('#app'); // RICHIAMO HTML PER VEDERE LA