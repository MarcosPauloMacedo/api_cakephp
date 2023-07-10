import './funcionarios.css'
import axios from "axios"
import { useEffect, useState } from 'react'
import { Tabela } from '../../../tabelas/Tabela'

export const Funcionarios = () => {

    const [funcionarios, setFuncionarios] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:80/api_cakephp/funcionarios")
          .then(response => {
            setFuncionarios(response.data)
          })
          .catch(error => {
            console.error(error);
          });
      }, []); 

    const dadosFuncionarios = funcionarios.map(item => {
        return {
          ...item,
          status: item.status ? 'ativo' : 'inativo'
        };
      });     

    return(
        <div className='listagem'> 
          <Tabela dados = {dadosFuncionarios} />
        </div>
    )
}