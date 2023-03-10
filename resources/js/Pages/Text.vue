<script setup>
import { h } from 'vue'
import TextInput from '../Components/TextInput.vue'
import { Link } from '@inertiajs/vue3'



</script>
<script>


export default {
    props: ['text'],
    data() {
        return {
            modalIsOpen: false,
            textContent: this.text.text
        }
    },
    render() {

        let contentRender = this.repText(this.textContent);
        console.log('render', this.modalIsOpen);
        return [...contentRender, 
                h('div', [this.modalIsOpen ? h('div', 'yes') : h('span', 'no')])
                ];
    },
    methods: {
            openModal: function () {
                
                this.modalIsOpen = true;
            },

            repText: function(texto) {

                const regex = /(<word>.+?<\/word>)/g;

                const textArray = texto.split(regex).reduce((acc, curr, index, arr) => {
                if (index % 2 === 0) {
                    return acc.concat(curr);
                }
                if (curr !== arr[index - 1]) {
                    return acc.concat(curr);
                }
                return acc;
                }, []);

                const newArray = textArray.map((item) => {
                    if (regex.test(item)) {
                        const content = item.match(/<word>(.+?)<\/word>/)[1];
                        return h('a', { href: '#', onClick: () => { this.openModal(); } }, content);
                    } else { 
                        return h('span', { innerHTML: item});
                    }
                });

                return newArray;
                }

        }
    
}

</script>