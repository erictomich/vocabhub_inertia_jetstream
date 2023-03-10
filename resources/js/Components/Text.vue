<script>
import { Link } from '@inertiajs/vue3'

export default {
    props: ['title', 'content'],
    data() {
       return {
          content: replaceText(this.content)
       }
    },
    
    mounted() {
      let newText = replaceText(this.content);
      console.log(newText);
    },
    computed: {
      
    }
}

function replaceText(text) {
    
    var htmlRegexG = /<word>(.+?)<\/word>/g;

    let listaPalavrasComTags = text.match(htmlRegexG); 

    let regexTag = /(<([^>]+)>)/ig

    let listaPalavrasComTagsSemRepetir = [];

    listaPalavrasComTags = listaPalavrasComTags || [];

    if(typeof listaPalavrasComTags != null) {
        listaPalavrasComTagsSemRepetir = listaPalavrasComTags.filter((item, index) => {
          return listaPalavrasComTags.indexOf(item) === index;
        })
    }

    console.log(listaPalavrasComTags);


    let listaPalavras = listaPalavrasComTagsSemRepetir.map((item) => {
      
      let palavra = item.replace(regexTag, "");
      return {"tag":item, "palavra": palavra}
    })

    console.log(listaPalavras);

  //  let replacedText;
    let replacedText = text;
    //  listaPalavras.map((el) => {
    //    replacedText = reactStringReplace(replacedText, el.tag, (match, i) => (
    //     <Link @click="showWord('${el.palavra.trim()}')">${el.palavra}</Link>
    //   ));
      
    //  })
     listaPalavras.forEach((el) => {
      replacedText = replacedText.replace(
        new RegExp(el.tag, "g"),
        `<a href="#" @click="showWord('${el.palavra.trim()}')">${el.palavra}</a>`
      );
    });


     text = replacedText;

    /// ReactDOM.hydrate(<>{text}</>, textContainer);
    //console.log(text);

    return text;
  }

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">


            <h1 class="mt-4 text-2xl font-medium text-gray-900">
                {{ title }}
            </h1>

            <div class="mt-6 text-gray-500 leading-relaxed" v-html="content">
             
            </div>
        </div>

      
    </div>
</template>
