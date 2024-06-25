let toggler = document.querySelector('.tool-toggler');
let parent = document.querySelector('.demo-tool');
let child = document.querySelectorAll('.list-inline-item');
let linkStyle = document.getElementById('color-scheme');
toggler.addEventListener('click', () => {
  parent.classList.toggle('show');
});

child.forEach((element) => {
  element.addEventListener('click', () => {
    linkStyle.href = element.dataset['path'];
  });
});
