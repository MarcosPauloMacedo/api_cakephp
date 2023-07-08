import './listagem.css'
import Inicial from '../../menus/inicial'
import axios from "axios"
import { useEffect, useState } from 'react'
import { Tabela } from '../../tabelas/Tabela'


export const Listagem = ()=>{

    const [alunos,setAlunos] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:80/api_cakephp/alunos")
          .then(response => {
            setAlunos(response.data)
          })
          .catch(error => {
            console.error(error);
          });
      }, []);      

    return(
        <div className='listagem'>
            <div className='menu'>
                <Inicial />
            </div>
                
            <div className='dashboard'>
                <section className='dashboard-menu'></section>
                <section className='dashboard-listagem'>
                  <Tabela dados = {alunos} />
                </section>
            </div>
        </div>
    )
}