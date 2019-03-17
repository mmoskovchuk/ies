var vm = new Vue({
    el: document.querySelector('#mount'),
    data: {
        posts: []
    },
    methods: {
        fetchPosts: function () {
            var url = '/wp-json/wp/v2/pages?parent=274&orderby=date';
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
    template: '<div class="content-block__ad-wrap">\
                 <div class="content-block__ad-block" v-for="post in posts">\
                 <a v-bind:href="post.link">{{post.title.rendered}}</a>\
                 </div>\
                 </div>',
});
