let maximg = 9
let images = 3

document.getElementById('addimg').addEventListener('click', () => {

    if (images < maximg) {
        images++
        document.getElementById('divimg').innerHTML += `<div class="pl-2 flex flex-col gap-1">
                <span class="font-semibold text-sm">Image ${images}<span class="font-light">(obligatoire)</span></span>
                <input type="file" class="file-input w-full" name="image${images}"/>
            </div>`
    }

})