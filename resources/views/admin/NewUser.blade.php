<template>
    <div class="list-content content-frm-register">
        <form class="frm-register">
            <legend class="legend-form">Новый сотрудник</legend>
            <div class="form-register-users">
                <div>
                    <p class="txt-input-form">Введите данные о новом сотруднике</p>
                    
                    <!--<div class="group-fio-form">-->
                        <div>
                            <p class="txt-input-form">Имя</p>
                            <input type="text" class="input-form">
                        </div>
                        <div>
                            <p class="txt-input-form">Фамилия</p>
                            <input type="text" class="input-form">
                        </div>
                        <div>
                            <p class="txt-input-form">Отчество</p>
                            <input type="text" class="input-form">
                        </div>
                    
                    <p class="txt-input-form">Логин</p>
                    <input type="text" class="input-form">
                    <p class="txt-input-form">Пароль</p>
                    <div  class="input-password">
                        <input type="password" class="input-form input-password">
                        <button class="btn-chk-password">()</button>
                    </div>
                    <p class="txt-input-form">Укажите категорию</p>
                    <select class="slct-form">
                        <option></option>
                    </select>
                    <button class="btn btn-dark btn-submit btn-list">Сохранить</button>
                    <!--
                    <div>
                        <input type="submit" title="Сохранить" class="btn btn-dark btn-submit">
                    </div>-->
                </div>
                <div>
                    <p class="txt-input-form">Выберите фото сотрудника</p><br>
                    <div class="content-img-frm">
                        <button class="btn-img-user"></button>
                        <p class="txt-input-form">Фото сотрудника</p>
                    </div>
                    
                </div>
            </div>
            
           
        </form>
    </div>
</template>

<script>

    /*import {makeRequest} from '../helper/fetch'

    export default{
        created(){

        }
        data(){
            return{
                images:[]
            }
        }
    }*/
</script>

<style>
</style>