import './principal.css'
import Menu_lateral from '../../menus/Menu_lateral'
import Alunos from '../listagem/alunos'
import Funcionarios from '../listagem/funcionarios'

export const Principal = () => {
    return(
        <div>
            <main className='page_principal'>
                <div className='menu_lateral'>
                    <Menu_lateral />    
                </div>
                <div className='conteudo'>
                    <Funcionarios />
                </div>
            </main>
        </div>
    )
}