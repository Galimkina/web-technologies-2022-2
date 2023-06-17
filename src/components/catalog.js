export class Catalog {
    #el = null;
    #paginationEl = null;
    #cardEl = null;
    #page = null;
    #total = null;
    #renderCard = null;
    #getPosts = null;

    constructor(el, options) {
        this.#el = el;
        const { renderCard, getPosts } = options;
        this.#page = this.getPage();
        this.#paginationEl = el.querySelector('[data-catalog-pagination]');
        this.#cardEl = el.querySelector('[data-catalog-cards]');
        this.#renderCard = renderCard;
        this.#getPosts = getPosts;
    }

    get limit() {
        return 12;
    }

    get pageCount() {
        return Math.ceil(this.#total / this.limit);
    }

    async init() {
        window.onpopstate = async () => {
            const url = new URL(window.location.href);
            const page = +url.searchParams.get('page');

            if (page !== this.#page) {
                this.setPage(page);
                await this.loadPosts();
            }
        }
        this.#paginationEl.addEventListener('click', async (event) => {
            const item = event.target.dataset.catalogPaginationPage ? event.target : event.target.closest('[data-catalog-pagination-page]');

            if (!item) {
                return;
            }

            const page = +item.dataset.catalogPaginationPage;

            this.setPage(page);
            this.pushState();
            await this.loadPosts();
        })
        await this.loadPosts();
    }

    getPage() {
        const url = new URL(window.location.href);
        const page = +url.searchParams.get('page');

        return page || 1;
    }

    setPage(page) {
        this.#page = page;
    }

    pushState() {
        const url = new URL(window.location.href);
        url.searchParams.set('page', this.#page);

        window.history.pushState({}, '', url);
    }

    async loadPosts() {
        try {
            let {posts, total} = await this.#getPosts({ limit: this.limit, page: this.#page});
                    this.#total = total;
                    this.renderPosts(posts);
                    this.renderPagination();
        } catch (error) {
            window.location.href = 'error.html';
            console.log(error);
        }
    }

    renderPosts(posts) {
        this.#cardEl.innerHTML = posts.map(this.#renderCard).join('');
    }

    renderPagination() {
        let html = '';

        for (let index = 0; index < this.pageCount; index++) {
            const page = index + 1;

            const classes = ['catalog__pagination-item'];

            if (page === this.#page) {
                classes.push('catalog__pagination-item_active')
            }

            html += `
                <button
                    class="${classes.join(' ')}"
                    data-catalog-pagination-page="${page}"
                    >
                    ${page}
                </button>
           `
        }
            this.#paginationEl.innerHTML = html;
    }
}