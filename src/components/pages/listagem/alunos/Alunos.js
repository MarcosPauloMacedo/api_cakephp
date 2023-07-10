import './alunos.css'
import axios from "axios"
import { useEffect, useState } from 'react'
import { Tabela } from '../../../tabelas/Tabela'

export const Alunos = () => {

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

    const dadosAlunos = alunos.map(item => {
      return {
        ...item,
        idade: `${item.idade} anos`,
        status: item.status ? 'ativo' : 'inativo'
      };
    });  
    
    return(
        <div className='listagem'> 
          <Tabela dados = {dadosAlunos} />
        </div>
    )
}