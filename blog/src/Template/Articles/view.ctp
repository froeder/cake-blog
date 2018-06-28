<div class="content">
    <div class="content">
        <div class="content">
            <div class="content">
                <!-- File: src/Template/Articles/view.ctp -->

                <h2><?= h($article->title) ?></h2>
                <h4><?= h($article->body) ?></h4>
                <p><strong>Criado: <?= $article->created->format(DATE_RFC850) ?></strong></p>

                <?= $this->Html->Link('Voltar' , ['action' => 'index']) ?>
            </div>
        </div>
    </div>
</div>