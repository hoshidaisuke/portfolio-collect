<template>
<div>
    <h1>Posts</h1>
    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Task</router-link>
        </div>
    </div>

<!--<Tweet id="1309750313499279361"></Tweet>-->
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ポートフォリオ</th>
            <th>Twitter</th>
            <th>使用した技術・言語</th>
            <th>制作期間</th>
            <th>学習方法</th>
            <th>アピールポイント</th>
        </tr>
        </thead>
        <!--<tbody>-->
        <!--    <tr v-for="post in posts">-->
        <!--        <td>{{ post.portfolio }}</td>-->
        <!--        <td>{{ post.twitter }}</td>-->
        <!--        <td>{{ post.lang }}</td>-->
        <!--        <td>{{ post.term }}</td>-->
        <!--        <td>{{ post.method }}</td>-->
        <!--        <td>{{ post.appeal }}</td>-->
        <!--    </tr>-->
        <!--</tbody>-->
    </table>
</div>
</template>
<script>
// import { Tweet } from 'vue-tweet-embed'

export default {
    data() {
        return {
            posts: []
        }
    },
    mounted: function(){
        // axios.get('/api/posts').then(response => this.posts = response.data.data)
    },
    methods: {
        // deletePost(id)
        // {
        //     const uri = `/api/post/delete/${id}`;
        //     this.axios.delete(uri).then(response => {
        //         this.posts.splice(this.posts.indexOf(id), 1);
        //     });
        // }
    }
}
</script>