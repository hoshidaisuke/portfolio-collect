<template>
    <div>
        <h1>Create A Task</h1>
        <form @submit.prevent="addPost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ユーザ:</label>
                        <input type="text" class="form-control" v-model="post.user_id">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ポートフォリオURL:</label>
                        <input type="url" class="form-control" v-model="post.portfolio">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Twitterのポートフォリオ投稿URL:</label>
                        <input type="url" class="form-control" v-model="post.twitter">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>使用した技術・言語:</label>
                        <input type="text" class="form-control" v-model="post.lang">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>制作期間:</label>
                        <input type="text" class="form-control" v-model="post.term">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>学習方法:</label>
                        <input type="text" class="form-control" v-model="post.method">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>アピールポイント:</label>
                        <textarea class="form-control" v-model="post.appeal" rows="5"></textarea>
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
                post:{},
                link: ''
            }
        },
        methods: {
            addPost(){
                console.log(this.post);
                const uri = '/api/post/create';
                this.axios.post(uri, this.post).then((response) => {
                   this.$router.push({name: 'posts'});
                });
            }
        }
    }
</script>