import { defineStore } from 'pinia'
import axios from 'axios'

export const useLetterStore = defineStore({
    id: 'letter',
    state: () => ({
        rawItems: [] as any,
        index: 0,
    }),
    getters: {
    },
    actions: {
        async getLetters(){
            const res = await (await axios.get('https://8oj0p722.directus.app/items/letter')).data
            this.rawItems =  res.data
        },

        incrementeIndex() {
            if(this.index != 21){
                this.index++
            }

            console.log(this.index);
            
        },

        decrementeIndex() {
            if(this.index != 0){
                this.index--
            }
            console.log(this.index);
        },

        selectedIndex(index: number) {
            this.index = index
        }
    },
})