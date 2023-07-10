import './tabela.css'

function indices(dados){
    let indices = []

    for(let index in dados){
        if(index != 'id') indices.push(index)
    }

    return indices
}

export const Tabela = (props)=>{

    const indice = indices(props.dados.shift())

    return(
        <div className='tabela'>
            <table>
                <thead>
                    <tr>
                        {indice.map((item) => (
                            <th key={item}>{item}</th>
                        ))}
                    </tr>
                </thead>
                
                <tbody>
                    {props.dados.map((n, index) => (
                        <tr key={index}>
                            {indice.map((y) => (
                                <td key={y.id}>{n[y]}</td>
                            ))}
                            <a href='#'>view</a>
                            <a href='#'>edit</a>
                            <a href='#'>delete</a>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    )
}