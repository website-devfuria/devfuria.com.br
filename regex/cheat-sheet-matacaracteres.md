---
layout: materia
title:  Cheat sheet - Metacaracteres
---

Representantes
---

<table>
    <thead>
        <tr>
            <th>metacaractere</th>
            <th>mnemônico</th>
            <th>dica</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>.</code></td>
            <td>ponto</td>
            <td>
                <ul>
                    <li>curinga de um caractere</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>[]</code></td>
            <td>lista</td>
            <td>
                <ul>
                    <li>dentro todos são normais,</li>
                    <li>traço é intervalo ASCII,</li>
                    <li>[:POSIX:] tem acentuação</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>[^]</code></td>
            <td>lista negada</td>
            <td>
                <ul>
                    <li>sempre casa algo, </li>
                    <li>[:POSIX:] tem acentuação</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



Quantificadores - gulosos
---

<table>
    <thead>
        <tr>
            <th>metacaractere</th>
            <th>mnemônico</th>
            <th>dica</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>?</code></td>
            <td>opcional</td>
            <td>
                <ul>
                    <li>0 ou 1</li>
                    <li>pode ter ou não</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>*</code></td>
            <td>asterisco</td>
            <td>
                <ul>
                    <li>0 ou mais</li>
                    <li>repete em qualquer quantidade</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>+</code></td>
            <td>mais</td>
            <td>
                <ul>
                    <li>1 ou mais</li>
                    <li>repete em qualquer quantidade</li>
                    <li>pelo menos uma vez</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>{n,m}</code></td>
            <td>chaves</td>
            <td>
                <ul>
                    <li>número exato</li>
                    <li>mínimo</li>
                    <li>máximo</li>
                    <li>ou uma faixa numérica</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



Quantificadores - não gulosos
---

<table>
    <thead>
        <tr>
            <th>metacaractere</th>
            <th>mnemônico</th>
            <td>
                <ul>
                    <li>[:POSIX:] tem acentuação</li>
                </ul>
            </td>
            <th>dica</th>
        </tr>
    </thead>
        <tr>
            <td><code>??</code></td>
            <td>opcional</td>
            <td>
                <ul>
                    <li>0 ou 1</li>
                    <li>casa o mínimo possível</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>*?</code></td>
            <td>asterisco</td>
            <td>
                <ul>
                    <li>0 ou mais</li>
                    <li>casa o mínimo possível</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>+?</code></td>
            <td>mais</td>
            <td>
                <ul>
                    <li>1 ou mais</li>
                    <li>casa o mínimo possível</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>{n, m}?</code></td>
            <td>chaves</td>
            <td>
                <ul>
                    <li>numérico</li>
                    <li>casa o mínimo possível</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



Âncoras
---

<table>
    <thead>
        <tr>
            <th>metacaractere</th>
            <th>mnemônico</th>
            <th>dica</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>^</code></td>
            <td>circunflexo</td>
            <td>
                <ul>
                    <li>casa o começo da linha</li>
                    <li>especial no começo da expressão regular</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>$</code></td>
            <td>cifrão</td>
            <td>
                <ul>
                    <li>casa o fim da linha</li>
                    <li>especial no fim da expressão regular</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>\b</code></td>
            <td>borda</td>
            <td>
                <ul>
                    <li>limita uma palavra</li>
                    <li>letras, números e sublinhado</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



Outros
---

<table>
    <thead>
        <tr>
            <th>metacaractere</th>
            <th>mnemônico</th>
            <th>dica</th>
        </tr>
    </thead>
        <tr>
            <td><code>\</code></td>
            <td>escape</td>
            <td>
                <ul>
                    <li>escapa um meta, tira seu poder</li>
                    <li>escapa a si mesmo <code>\\</code></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>|</code></td>
            <td>ou</td>
            <td>
                <ul>
                    <li>indica alternativas</li>
                    <li>poder multiplicado pelo grupo</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>()</code></td>
            <td>grupo</td>
            <td>
                <ul>
                    <li>agrupa</li>
                    <li>é quantificável</li>
                    <li>pode conter outros grupos</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><code>\1</code></td>
            <td>retrovisor</td>
            <td>
                <ul>
                    <li>usado com o grupo</li>
                    <li>máximo 9</li>
                    <li>conta da esquerda para direita</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>