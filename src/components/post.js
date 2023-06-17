export class Post {
    #el = null;
    #commentEl = null;
    #post = null;
    #button = null;
    #getPost = null;
    #getComment = null;

    constructor(el, getPost, button, getComment, commentEl) {
        this.#el = el;
        this.#commentEl = commentEl;
        this.#button = button;
        this.#getPost = getPost;
        this.#getComment = getComment;
    }

    async init() {
        const url = new URL(window.location.href);
        this.#post = +url.searchParams.get('post');
        await this.loadPosts();
        this.#button.onclick = async () => {
            await this.loadComment();
        };
    }

    async loadPosts() {
        try {
            let info = await this.#getPost(this.#post);
            this.renderPost(info);
        } catch (error) {
            window.location.href = 'error.html';
            console.log(error);
        }
    }

    renderPost (info) {
        this.#el.innerHTML =
            `<p><b>Title:</b> ${info.title}</p>
            <p><b>Description:</b> ${info.body}</p>
            `;
    }

    async loadComment() {
        try {
            let comment = await this.#getComment(this.#post);
            this.renderComment(comment);
        } catch (error) {
            window.location.href = 'error.html';
            console.log(error);
        }
    }

    renderComment (comment) {
        for (let i in comment) {
            this.#commentEl.innerHTML +=
                `<div id="post-comments">
                    <p><b>Id:</b> ${comment[i].id}</p>
                    <p><b>Name:</b> ${comment[i].name}</p>
                    <p><b>Mail:</b> ${comment[i].email}</p>
                    <p><b>Description:</b> ${comment[i].body}</p>
<!--                    <p>_____________________________________________________________________________________________________________________________________________</p>-->
                </div>`
        }
        this.#button.style.display = "none";
    }
}