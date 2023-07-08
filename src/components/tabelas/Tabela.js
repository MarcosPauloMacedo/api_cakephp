import './tabela.css'

export const Tabela = (props)=>{

    const status = (status) => {
        if(status) return 'ativo';
        else return 'inativo';
    }

    return(
        <>
            <h2>Alunos do sistema</h2>
            <table className='tabela'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {props.dados.map(item => {
                        return(
                        <tr>
                            <td>{item.nome}</td>
                            <td>{item.idade}</td>
                            <td>{item.email}</td>    
                            <td>{item.telefone}</td>
                            <td>{status(item.status)}</td>
                        </tr>)
                    })}
                </tbody>
            </table>
        </>
    )
}