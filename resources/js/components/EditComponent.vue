<template>
<div>
    <h1>Edit Task</h1>
    <form @submit.prevent="updatePost">
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
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</template>

<script>
export default {
    data() {
        return {
            task: {}
        }
    },
    created() {
        const uri = `/api/task/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.task = response.data;
        });
    },
    methods: {
        updatePost() {
            const uri = `/api/task/update/${this.$route.params.id}`;
            this.axios.post(uri, this.task).then((response) => {
                this.$router.push({name: 'tasks'});
            });
        }
    }
}
</script>