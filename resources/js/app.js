import persist from '@alpinejs/persist';
import Alpine from 'alpinejs';
import './bootstrap';
 Alpine.plugin(persist)
 
window.Alpine = Alpine;

Alpine.store('cartData', () => ({
    open: false,
    cartItems:  Alpine.$persist([]),

    get cartListItems() {
        return this.cartItems.length;
    },
 
    toggle() {
        debugger
        this.open = ! this.open
    },

    newProduct: {
        title: '',
        price: '',
        image: '',
    },

    addToCart(item_sku){
        this.cartItems = this.cartItem.push(item_sku)
    }
}))
 
Alpine.start();