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

    methods: {
        addItem() {
            if (this.todoItem !== '') {

                const data = {
                    newItem: {
                        text: this.todoItem,
                        done: false
                    }
                };

                axios.post(this.apiUrl, data, {

                    headers: { 'Content-Type': 'multipart/form-data' }

                }).then((result) => {

                    // AGGIORNO TODOLIST
                    this.todoList = result.data;

                    // SVUOTO VARIABILE
                    this.todoItem = '';
                });
            }
        }
    },
}).mount('#app');