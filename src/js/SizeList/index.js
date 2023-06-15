import Button from "../Button/index.js";

export default class SizeList{
    container;
    button;
    elemCheck = document.getElementById('small');

    constructor(containerClass = '.js-pizza-size_catalog') {
        this.container = document.querySelector(containerClass);
        this.container?.addEventListener('click',this.eventHandler.bind(this));
        this.button = new Button();
    }

    eventHandler(event){
        const cardElem = event.target.closest('.pizza-size-card');
        if(cardElem){
            if(cardElem != this.elemCheck)
                this.button.addSize(cardElem);
            this.elemCheck = cardElem;
        }
    }
}
