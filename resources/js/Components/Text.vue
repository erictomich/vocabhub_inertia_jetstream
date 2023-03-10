<script setup>
import { h } from 'vue'

</script>
<script>


export default {
    props: ['text', 'words'],
    data() {
        return {
            modalIsOpen: false,
            textContent: this.text
        }
    },
    render() {
        
        let textWithTags; 

        
        if(this.words.length > 0) {
            textWithTags = this.envolverPalavrasComTag(this.textContent, this.words);
        } else {
            textWithTags = this.textContent;
        }
        

        let contentRender = this.repText(textWithTags);
        console.log('render', this.modalIsOpen);
        return [...contentRender, 
                h('div', [this.modalIsOpen ? h('div', 'yes') : h('span', 'no')])
                ];
    },
    methods: {
            openModal: function () {
                
                this.modalIsOpen = true;
            },
            envolverPalavrasComTag: function (texto, palavra) {
                const regex = new RegExp(palavra.join("|"), "g");
                return texto.replace(regex, "<word>$&</word>");
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
<style>
a {
    color: #FF0000;
}
</style>