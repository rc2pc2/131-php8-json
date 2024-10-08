const { createApp } = Vue


createApp({
    data() {
        return {
            todoList : [],
            newTaskContent: '',
        }
    },

    methods:{
        getTodolist(){
            axios.get('http://localhost/131-php8-json/api/')
                .then((response) => {
                    // handle success
                    console.log(response.data);
                    this.todoList = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },
        addNewTask(taskContent){

            const formData = new FormData();
            formData.append("newTodoItem", taskContent);

            axios.post('http://localhost/131-php8-json/api/index.php', formData).then((response)=> {
                console.log(response);
                this.todoList = response.data;
            }).catch(function (error) {
                console.log(error);
            });
        }
    },
    created(){
        this.getTodolist();
    }
}).mount('#app');