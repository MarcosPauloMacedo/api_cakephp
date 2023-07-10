import { Tabela } from '../../../tabelas/Tabela';
import axios from "axios"
import { useEffect, useState } from 'react'
import './cursos.css'

export const Cursos = () => {
    const [cursos, setCursos] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:80/api_cakephp/cursos")
          .then(response => {
            setCursos(response.data)
          })
          .catch(error => {
            console.error(error);
          });
      }, []); 

    const dadosCursos = cursos.map(item => {
        return {
            ...item,
            periodo: `${item.periodo} períodos`,
            valor_mensalidade: item.valor_mensalidade.toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            })
        }
    })
    
    return(
        <div className='cursos'>
            <Tabela dados = {dadosCursos} />
        </div>
    )
}