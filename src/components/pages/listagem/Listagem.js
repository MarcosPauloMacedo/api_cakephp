import './listagem.css'
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
          <Tabela dados = {alunos} />
        </div>
    )
}