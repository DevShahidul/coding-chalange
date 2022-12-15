import persist from '@alpinejs/persist';
import Alpine from 'alpinejs';
import './bootstrap';
 Alpine.plugin(persist)
 
window.Alpine = Alpine;

Alpine.data('cartData', () => ({
    open: false,
    cartItems:  Alpine.$persist([]),

    get cartListItems() {
        return this.cartItems.length;
    },
 
    toggle() {
        this.open = ! this.open
    },

    addToCart(item){
        this.cartItems.push(item);
        localStorage.setItem('cartItems', JSON.stringify(this.cartItems));
    },

    removeToCart(item_sku){
        this.cartItems.splice(this.cartItems.indexOf(item_sku));
        localStorage.setItem('cartItems', JSON.stringify(this.cartItems));
    }
}))
 
Alpine.start();