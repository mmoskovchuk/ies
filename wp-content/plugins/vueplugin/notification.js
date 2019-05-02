var vm = new Vue({
    el: document.querySelector('#mount'),
    data: {
        posts: [],
        postsToShow: 10
    },
    methods: {
        fetchPosts: function () {
            var url = '/wp-json/wp/v2/pages?parent=274&orderby=date&per_page=100';
            fetch(url).then((response) => {
                return response.json()
            }).then((data) => {
                this.posts = data;
            });
        }
    },
    mounted: function() {
        this.fetchPosts();
    },
    template: '<div class="content-block__notification-wrap">\
               <div class="content-block__notification-block"  v-if="postIndex < posts.length+1" v-for="postIndex in postsToShow">\
               <a v-bind:href="posts[postIndex-1].link">{{posts[postIndex-1].title.rendered}}</a>\
               </div>\
               <button @click="postsToShow += 5" class="content-block__notification_more-btn">Показати більше оголошень</button>\
               </div>'
});
