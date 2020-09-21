<template>
    <div>
        <h1>Create A Task</h1>
        <form @submit.prevent="addTask">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Task Title:</label>
                        <input type="text" class="form-control" v-model="task.title">
                    </div>
                    <div class="form-group">
                        <label>Task Deadline:</label>
                        <input type="date" class="form-control" v-model="task.deadline">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Task Comment:</label>
                        <textarea class="form-control" v-model="task.comment" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                task:{}
            }
        },
        methods: {
            addTask(){
                console.log(this.task);
                const uri = '/api/task/create';
                this.axios.post(uri, this.task).then((response) => {
                   this.$router.push({name: 'tasks'});
                });
            }
        }
    }
</script>