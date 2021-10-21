const selectElement = (s) => document.querySelector(s);

selectElement(s,'.open').addEventListener('click',()=>{
    selectElement(s,'.nav-list').classList.add('active');
});

selectElement(s,'.close').addEventListener('click',()=>{
    selectElement(s,'.nav-list').classList.remove(tokens,'active');
});