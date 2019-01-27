require('./style.css');
{
  const $filterForm = document.querySelector(`.filter--form`),
    $results = document.querySelector(`.grid--resultaten`);

  const init = () => {
    return;
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, e => {
        e.target.preventDefault();
      });
      $filterForm.addEventListener(`click`, handleClickSubmitFilterForm);
    }
  };

  const handleLoadResults = data => {
    $results.innerHTML = data
      .map(result => createResultListItem(result))
      .join(``);
  };

  const createResultListItem = result => {
    return `
      <li>
        <article class="article--resultaat">
          <a href="index.php?page=detail&amp;id=${result['id']}&amp;dag=${
  result['dag_id']
}">
            <div class="container--resultaat-img">
              <span class="page--tag page--tag-results">Acrobatie</span>
              <img src="./assets/img/acts/jpg/${result['img']}.jpg" alt="${
  result['name_act']
}" width="300" height="300">
            </div>
          </a>
          <div class="container--resultaat-info">
            <h3 class="title--resultaat-name-act">${result['name_act']}</h3>
            <p class="title--resultaat-name-group">${result['name_group']}</p>
            <p class="p--resultaat-uur">${result['uur']}</p>
            <a href="index.php?page=detail&amp;id=${result['id']}&amp;dag=${
  result['dag_id']
}" class="link--meerWeten">MEER WETEN</a>
          </div>
          <img src="./assets/img/resultaat_320.png" class="decoratie--streep" alt="">
        </article>
      </li>`;
  };

  const handleClickSubmitFilterForm = e => {
    console.log(e);
    console.log('submit');
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadResults(data));
    // .then(r => r.text())
    // .then(text => console.log(text));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  init();
}
