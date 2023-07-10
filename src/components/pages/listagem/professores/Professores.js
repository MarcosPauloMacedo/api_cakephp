import { Tabela } from '../../../tabelas/Tabela';
import axios from "axios"
import { useEffect, useState } from 'react'
import './professores.css'

export const Professores = () => {
    const [professores, setProfessores] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:80/api_cakephp/professores")
          .then(response => {
            setProfessores(response.data)
          })
          .catch(error => {
            console.error(error);
          });
      }, []); 

    const dadosProfessores = professores.map(item => {
        return {
            id: item.id,
            titulacao: item.titulacao,
            ...item.funcionario,
            status: item.funcionario.status ? 'ativo' : 'inativo'
            }})
    
    return(
        <div>
            <Tabela dados={dadosProfessores} />
        </div>
    )
}