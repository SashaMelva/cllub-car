<template>
     <header>
      <nav class="nav-header-app-page">
        <div class="conteiner">
          <router-link v-for="item in menuItemsAdmin"
                      :key="item.route"
                      :to ="{name: item.route}"
                      tag="li"
                      class="">
            <a class="header-nav-a">
              {{item.title}}
            </a>
          </router-link>
        </div>
      </nav>
    </header>
    <main></main>
    <footer></footer>
</template>

<script>

export default{
  data(){
    return{
      menuItemsAdmin: [{
        title: 'Пользователи',
        route: 'users'
      },
      {
        title: 'Новый пользователь',
        route: 'new-user'
      },
      {
        title: 'Заказы',
        route: 'order'
      },
      {
        title: 'Рабочая смена',
        route: 'work-shift'
      }
      ]
    }
  }
}
</script>

<style>

</style>