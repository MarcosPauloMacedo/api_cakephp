import './tabela.css'

export const Tabela = (props)=>{

    const status = (status) => {
        if(status) return 'ativo';
        else return 'inativo';
    }

    return(
        <div className='tabela'>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Status</th>
                        <th>Idade</th>
                    </tr>
                </thead>
                <tbody>
                    {props.dados.map(item => {
                        return(
                        <tr>
                            <td>{item.nome}</td>
                            <td>{item.email}</td>    
                            <td>{item.telefone}</td>
                            <td>{status(item.status)}</td>
                            <td>{item.idade} anos</td>
                            <td>
                                <a href='#'>View</a>
                                <a href='#'>Edit</a>
                                <a href='#'>Delete</a>
                            </td>
                        </tr>)
                    })}
                </tbody>
            </table>
        </div>
    )
}