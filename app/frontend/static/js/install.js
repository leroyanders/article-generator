function unique(){
    fetch('/api/data/get_articles')
        .then(response => response.json())
        .then(data => {
            var count = data.length;
            var id = 0;
            var lang = document.querySelector('[name="language"]').value.trim();

            let progress = document.querySelector('.progress-unique');
            let progress_bar = progress.querySelector('.progress-bar');

            progress.classList.remove('d-none');
            progress_bar.setAttribute('aria-valuemax', count);

            var load = () => {
                xhr = new XMLHttpRequest();
                xhr.open('POST','http://' + wsapi__host + '/api/v1/articles?lang=' + lang)
                xhr.onload = () => {
                    if(id != count){
                        update = new XMLHttpRequest();
                        update.open('POST', '/api/data/update_article');
                        update.onload = () => load();
                        update.send(xhr.response);
                    }else{
                        window.location.href = '/';
                    }
                }
                xhr.send(JSON.stringify(data[id]));
                progress_bar.setAttribute('aria-valuenow', parseInt(progress_bar.getAttribute('aria-valuenow')) + 1);
                progress_bar.style.width = (count / 100) * parseInt(progress_bar.getAttribute('aria-valuenow')) + '%';
                id++;
            }

            load();
        });
}