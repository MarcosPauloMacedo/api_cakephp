import './listagem.css'
import Inicial from '../../menus/inicial'
import axios from "axios"
import { useEffect } from 'react'


export const Listagem = ()=>{

    useEffect(() => {
        axios.get("http://localhost:80/api_cakephp/alunos")
        .then(() =>{
            console.log('ok')
        })

        .catch(() => {
            console.log('erro')
        })
    },[])

    return(
        <div className='listagem'>
            <div className='menu'>
                <Inicial />
            </div>
                
            <div className='dashboard'>
                <section className='dashboard-menu'></section>
                <section className='dashboard-listagem'>  
                </section>
            </div>
        </div>
    )
}