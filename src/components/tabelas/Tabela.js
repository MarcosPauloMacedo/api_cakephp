import './tabelas.css'

export const Tabela = (props)=>{

    return(
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                {props.map(item => {
                    return(
                    <tr>
                        <td>{item.nome}</td>
                        <td>{item.idade}</td>
                        <td>{item.email}</td>    
                    </tr>)
                })}
            </tbody>
        </table>
    )
}