import './listagem.css'
import Inicial from '../../menus/inicial'
import axios from "axios"
import { useEffect, useState } from 'react'


export const Listagem = ()=>{

    const [alunos,setAlunos] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:80/api_cakephp/alunos")
          .then(response => {
            console.log(response.data)
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
                  {
                    alunos.map(item =>{
                        return <h3 key={item.id}>{item.nome}</h3>
                    })
                  }
                </section>
            </div>
        </div>
    )
}