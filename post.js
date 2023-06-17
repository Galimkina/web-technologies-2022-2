import { Post } from "./src/components/post.js"

const getPostItems = async (postId) => {
    let res = await fetch(`https://jsonplaceholder.typicode.com/posts/${postId}`);
    return await res.json();
}

const getPostComment = async (postId) => {
    let res = await fetch(`https://jsonplaceholder.typicode.com/posts/${postId}/comments`);
    return await res.json();
}

const init = async () => {
    const post_cards = document.getElementById('post_cards');
    const post_button = document.getElementById('post_button');
    const post_comment = document.getElementById('post_comment');
    let posts = new Post(post_cards, getPostItems, post_button, getPostComment, post_comment);
    await posts.init();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
}
else {
    await init();
}

