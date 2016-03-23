<form method="get" id="search">
  <div class="demo-drawer mdl-layout__drawer-right">
    <span class="mdl-layout-title mdl-color--amber mdl-color-text--white">{{Lang::get('general.Search')}}<span class="mdl-search__div-close"><i class="material-icons">highlight_off</i></span></span>
     <div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label mdl-search__div" data-upgraded="eP">
 		{!!Form::text('name', $filters['name'], array('class' => 'mdl-textfield__input mdl-search__input'))!!}
		{!!Form::label('name', Lang::get('general.name'), array('class' => 'mdl-textfield__label is-dirty'))!!}
     </div>
     <div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label mdl-search__div" data-upgraded="eP">
 		{!!Form::text('city', $filters['city'], array('class' => 'mdl-textfield__input mdl-search__input'))!!}
		{!!Form::label('city', Lang::get('general.city'), array('class' => 'mdl-textfield__label is-dirty'))!!}
     </div>
     <div class="mdl-textfield mdl-js-textfield is-upgraded is-focused mdl-textfield--floating-label mdl-search__div" data-upgraded="eP">
 		{!!Form::text('country', $filters['country'], array('class' => 'mdl-textfield__input mdl-search__input'))!!}
		{!!Form::label('country', Lang::get('general.country'), array('class' => 'mdl-textfield__label is-dirty'))!!}
     </div>
     <button type="submit" class="mdl-button mdl-color--amber mdl-color-text--white mdl-js-button mdl-button--raised mdl-button--colored mdl-search__button">
		{{Lang::get('general.Search')}}
     </button>
  </div>
</form>